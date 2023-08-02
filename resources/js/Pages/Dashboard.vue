<template>
    <app-layout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Admin Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <form @submit.prevent="submit" class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
                    <div class="mb-4">
                        <label for="title" class="block mb-2 text-sm font-bold text-gray-700">Titre de la formation</label>

                        <input id="title"
                            class="w-full px-3 py-2 leading-tight text-gray-700 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            v-model="form.title" />

                        <div class="mt-2 text-red-600" v-if="$page.errors.title">{{ $page.errors.title[0] }}</div>

                    </div>
                    <label for="description" class="block mb-2 text-sm font-bold text-gray-700">Description</label>
                    <textarea id="description"
                        class="w-full px-3 py-2 leading-tight text-gray-700 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        v-model="form.description"></textarea>

                    <div class="mt-2 text-red-600" v-if="$page.errors.description">{{ $page.errors.description[0] }}</div>

                    <h3 class="my-4 text-2xl text-pink-800">Episodes de la formation</h3>

                    <div class="mb-4 text-red-600" v-if="$page.errors.episodes">
                        {{ $page.errors.episodes[0] }}
                    </div>

                    <div v-for="(episode, index) in this.form.episodes" v-bind:key="index">

                        <label :for="'episode-title-' + index" class="block my-2 text-sm font-bold text-gray-700"
                            v-bind:class="computedClass(index)">Titre de l'épisode {{ index + 1 }}</label>

                        <input :id="'episode-title-' + index"
                            class="w-full px-3 py-2 leading-tight text-gray-700 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            v-model="form.episodes[index].title" />

                        <div class="mt-2 text-red-600" v-if="$page.errors['episodes.' + index + '.title']">{{
                            $page.errors['episodes.' + index + '.title'][0] }}</div>

                        <label :for="'episode-description-' + index"
                            class="block my-2 text-sm font-bold text-gray-700">Description de l'épisode {{ index + 1
                            }}</label>

                        <input :id="'episode-description-' + index"
                            class="w-full px-3 py-2 leading-tight text-gray-700 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            v-model="form.episodes[index].description" />

                        <div class="mt-2 text-red-600" v-if="$page.errors['episodes.' + index + '.description']">{{
                            $page.errors['episodes.' + index + '.description'][0] }}</div>

                        <label :for="'episode-video_url-' + index" class="block my-2 text-sm font-bold text-gray-700">Lien
                            vidéo de l'épisode {{ index + 1 }}</label>

                        <input :id="'episode-video_url-' + index"
                            class="w-full px-3 py-2 leading-tight text-gray-700 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            v-model="form.episodes[index].video_url" />

                        <div class="mt-2 text-red-600" v-if="$page.errors['episodes.' + index + '.video_url']">{{
                            $page.errors['episodes.' + index + '.video_url'][0] }}</div>

                    </div>
                    <div class="my-4">
                        <label for="image" class="block mb-2 text-sm font-bold text-gray-700">Upload Image</label>
                        <input type="file" id="image" accept="image/*" @change="onImageChange" />
                        <div v-if="imagePreview">
                            <img :src="imagePreview" alt="Image Preview" class="mt-2 max-h-48" />
                        </div>
                    </div>

                    <button class="px-4 py-2 my-4 font-bold text-white bg-green-500 rounded hover:bg-green-700"
                        v-if="form.episodes.length < 15" @click.prevent="add">
                        +
                    </button>
                    <button class="px-4 py-2 my-3 font-bold text-white bg-red-500 rounded hover:bg-red-700"
                        v-if="form.episodes.length > 1" @click.prevent="remove">
                        -
                    </button>
                    <button type="submit"
                        class="block px-3 py-2 text-white bg-indigo-800 rounded hover:bg-indigo-600">Enregistrer ma
                        formation</button>
                </form>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from './../Layouts/AppLayout'

export default {
    components: {
        AppLayout
    },

    data() {
        return {
            form: {
                title: null,
                description: null,
                episodes: [
                    { title: null, description: null, video_url: null }
                ]
            },
            imagePreview: null,
        }
    },

    methods: {
        async submit() {
            const formData = new FormData();
            formData.append('title', this.form.title);
            formData.append('description', this.form.description);
            formData.append('image', this.form.image); // Add the image to the form data

            // Loop through episodes and append them to the form data
            this.form.episodes.forEach((episode, index) => {
                formData.append(`episodes[${index}][title]`, episode.title);
                formData.append(`episodes[${index}][description]`, episode.description);
                formData.append(`episodes[${index}][video_url]`, episode.video_url);
                formData.append(`episodes[${index}][path]`, ''); // Set path to an empty string for each episode
            });

            // Add the original name of the image to the first episode's 'path'
            if (this.form.image instanceof File) {
                formData.append(`episodes[0][path]`, this.form.image.name);
            }

            // Use Inertia's post method with the FormData object
            await this.$inertia.post('/courses', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data', // Set the correct Content-Type for the FormData
                },
            });
        },

        add() {
            this.form.episodes.push({ title: null, description: null, video_url: null });
        },

        remove() {
            this.form.episodes.pop();
        },

        computedClass(index) {
            let className = index > 0 ? 'mt-10' : '';

            return className;
        },
        onImageChange(event) {
            const file = event.target.files[0];
            this.form.image = file;
            this.imagePreview = URL.createObjectURL(file);
        },
    }
}
</script>

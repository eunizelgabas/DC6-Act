<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Card from '@/Components/Card.vue'
import { Head } from '@inertiajs/vue3';

const client = [{

"id" : 1,
'name': "Eunizel Gabas",
'position' : 'Product Manager',
'post': 4,
'follower': 302,
'following': 100,
'pic': "https://i.pinimg.com/564x/18/65/40/186540b269b05cce2125a9221883320f.jpg"

},
{

"id" : 2,
'name': "Eula Gabas",
'position' : 'Web Developer',
'post': 5,
'follower': 123,
'following': 23,
'pic': "https://i.pinimg.com/564x/f6/23/3e/f6233e56a4f5fa82e11d24118d60f61e.jpg"

},
{

"id" : 3,
'name': "Lyra Cosgafa",
'position' : 'Nurse',
'post': 52,
'follower': 143,
'following': 124,
'pic': "https://i.pinimg.com/564x/01/bc/5d/01bc5d2ab7415af42243fda73385a2c6.jpg"

}
]

</script>

<style scoped>
.grid{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px 24px;
}

.card-image{
    width: 100%;
    aspect-ratio: 16/9;

    object-fit: cover;
}
</style>

<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">View Cars</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">

                    <div class="grid">
                        <Card v-for="cl in client">
                            <template #head>
                                <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover" >
                                    <img src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/banner.ef572d78f29b0fee0a09.png' class="absolute flex h-32 w-full justify-center rounded-xl bg-cover">
                                    <div class="absolute -bottom-12 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400 dark:!border-navy-700">
                                        <img class="h-full w-full rounded-full" :src="cl.pic" alt="" />
                                    </div>
                                </div>
                            </template>
                            <template #content1>
                                <div class="mt-16 flex flex-col items-center">
                                    <h4 class="text-xl font-bold text-navy-700 dark:text-black">
                                    {{cl.name}}
                                    </h4>
                                    <p class="text-base font-normal text-gray-600">{{ cl.position }}</p>
                                </div>
                            </template>
                            <template #content2>
                                <div class="mt-6 mb-3 flex gap-14 md:!gap-14 ml-8">
                                    <div class="flex flex-col items-center justify-center">
                                    <p class="text-2xl font-bold text-navy-700 dark:text-black">{{cl.post}}</p>
                                    <p class="text-sm font-normal text-gray-600">Posts</p>
                                    </div>
                                    <div class="flex flex-col items-center justify-center">
                                    <p class="text-2xl font-bold text-navy-700 dark:text-black">
                                        {{ cl.follower }}k
                                    </p>
                                    <p class="text-sm font-normal text-gray-600">Followers</p>
                                    </div>
                                    <div class="flex flex-col items-center justify-center">
                                    <p class="text-2xl font-bold text-navy-700 dark:text-black">
                                     {{cl.following}}
                                    </p>
                                    <p class="text-sm font-normal text-gray-600">Following</p>
                                    </div>
                                </div>
                            </template>
                        </Card>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>



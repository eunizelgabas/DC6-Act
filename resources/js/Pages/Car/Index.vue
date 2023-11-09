<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Card from '@/Components/Card.vue'
import { Head } from '@inertiajs/vue3';

const car = [{

"id" : 1,
'title': "Nissan Terra",
'description' : 'Designed to turn heads, on-road or off-road, the Terra features a muscular stance, rugged design touches, and plenty of luxurious features inside.',
'rating': 4.00,
'price': 1540900,
'thumbnail': "https://motorgrupo.network/uploads/vehicle_images/original-L520033-2023-Nissan-terra-33058.jpg"

},
{

"id" : 2,
'title': "Isuzu Dmax",
'description' : 'Isuzu D-Max is equipped to offer a blend of comfort and practicality in equal measure. Two-door, two-seater, single cab pick-up, with all-steel body mounted on steel ladder-frame chassis. ',
'rating': 5.00,
'price': 1200300,
'thumbnail': "https://images.drive.com.au/driveau/image/upload/c_fill,f_auto,g_auto,h_252,q_auto:good,w_448/v1/cms/uploads/w4dgf8slewfs7tabting"

},
{

"id" : 3,
'title': "Geely Okavango",
'description' : 'The all-new crossover brings with it contemporary styling along with a 7-seater capacity.',
'rating': 5.00,
'price': 1400300,
'thumbnail': "https://images.summitmedia-digital.com/topgear/images/2020/11/19/geely-okavango-2021-main-1605776402.jpg"

}
]

</script>

<template>
    <Head title="Cars" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">View Cars</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">
                    <div class="grid">
                        <Card v-for="c in car">
                            <template #head>
                                <img class="w-full" :src="c.thumbnail" alt="River">

                            </template>

                            <template #content1>

                                <div class="font-bold text-4xl mb-2 text-center ">{{c.title}}</div>

                            </template>
                            <template #content2>

                                <p class="text-base text-body-color leading-relaxed min-h-[100px]">
                                        {{c.description}}
                                </p>
                            </template>

                            <template #footer>
                                <div class="flex justify-between mt-5 ">
                                    <div class="font-bold text-2xl text-center">PhP {{c.price}}</div>

                                    <button class="group relative h-12 w-48 overflow-hidden rounded-2xl bg-blue-500 text-lg font-bold text-white">
                                        Add to Cart
                                        <div class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
                                    </button>
                                </div>
                            </template>
                        </Card>
                    </div>

                    <br>

                    <Card>
                        <template #head>
                            <h1 class="text-4xl text-blue-500">Announcement</h1>
                            <hr class="border border-gray-300">
                        </template>
                        <template #content1>
                            <div class="grid gap-5 md:grid-cols-2 md:gap-10 lg:gap-20 justify-between">
                                <div class="flex justify-center md:justify-end">
                                    <img class="w-full max-w-sm" src="https://ouch-cdn2.icons8.com/sKnF2PmYhkmP28DzIm6KqWSknT03UVWjg3FLlGYIOp4/rs:fit:684:456/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9zdmcvOTI3/L2U4OWQ2NmZiLTg0/NzEtNDc3NS1hNTA0/LTMwNWRiYmJkNzg0/MC5zdmc.png" alt="Marketing newsletter via computer Illustration in PNG, SVG" />
                                </div>
                                <div class="flex items-center">
                                    <div class="mx-auto md:mx-0">
                                        <h3 class="text-4xl font-bold text-black">Subscribe</h3>
                                        <p class="mt-2 max-w-[100rem] text-lg text-black">Join our weekly promo. You'll also receive some of our best deals today.</p>
                                        <form action="" class="mt-4 flex flex-col">
                                            <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full rounded border border-gray-300 bg-transparent px-3 py-2 text-black placeholder:text-black md:max-w-[18rem]" />
                                            <button type="submit" class="mt-4 w-full max-w-[14rem] rounded bg-blue-400 px-14 py-2 text-center text-white">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </Card>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

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

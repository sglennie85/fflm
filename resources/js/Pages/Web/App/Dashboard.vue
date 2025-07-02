<script setup>
import BannerLogo from "@/Components/BannerLogo.vue";
import Button from "primevue/button"
import { Link, router } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";

const logout = () => {
    router.post(route('logout'));
};

</script>

<template>
    <AppLayout title="Dashboard">
        <div class="w-full bg-gray-50 border-b border-gray-200 py-4">
            <div class="max-w-screen-xl mx-auto flex items-center justify-center px-4">
                <BannerLogo />
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-50 space-y-8 px-4">
                        <div class="flex space-x-8">
                            <Link
                                class="flex items-center w-full justify-evenly gap-x-2 px-4 rounded border h-20 shadow"
                                :href="route('app.leagues.leagues')"
                            >
                                Leagues
                            </Link>
                            <Link
                                class="flex items-center w-full justify-evenly gap-x-2 px-4 rounded border h-20 shadow"
                                :href="route('app.reference')"
                            >
                                Reference
                            </Link>
                            <Link
                                class="flex items-center w-full justify-evenly gap-x-2 px-4 rounded border h-20 shadow"
                                :href="route('app.reference')"
                            >
                                Settings
                            </Link>
                            <Link
                                class="flex items-center w-full justify-evenly gap-x-2 px-4 rounded border h-20 shadow"
                                @click="logout"
                            >
                                Logout
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

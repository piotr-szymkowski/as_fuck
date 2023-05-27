<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <Head title="Witaj na as_fuck" />

    <div>
        <div>
            <Link
                :href="route('dashboard')">Profil</Link>

            <div>
                <Link
                    :href="route('login')">Zaloguj</Link>
                <Link
                    :href="route('register')">Zarejestruj</Link>
            </div>
        </div>
    </div>
</template>

<style>
</style>

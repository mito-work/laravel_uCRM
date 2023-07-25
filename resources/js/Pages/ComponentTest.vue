<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Input from "@/Components/TextInput.vue";
const emitTest = (e) => console.log(e);
</script>

<template>
    <GuestLayout>
        <Input
            modelValue="初期値が入ります"
            @update:modelValue="emitTest"
        ></Input>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Input from "@/Components/TextInput.vue";
import Label from "@/Components/InputLabel.vue";
const emitTest = (e) => console.log(e);
</script>

<template>
    <GuestLayout>
        <Label value="件名"></Label>
        <Input
            modelValue="初期値が入ります"
            @update:modelValue="emitTest"
        ></Input>
    </GuestLayout>
</template>

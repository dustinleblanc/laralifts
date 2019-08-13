<template>
    <div>
        <a class="hover:text-teal-300" href="#" @click="toggleContents" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ label }} <span class="caret"></span>
        </a>
        <transition>
            <div
                class="bg-gray-100 rounded shadow p-4 m-4 text-gray-600 absolute"
                v-show="showContents"
                aria-labelledby="navbarDropdown">
                <slot></slot>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        name: "AppDropdown",
        props: {
            label: {
                type: String,
                default: ""
            }
        },
        data() {
            return {
                showContents: false
            }
        },
        methods: {
            toggleContents() {
                this.showContents = !this.showContents;
            }
        }
    }
</script>

<style scoped>

</style>

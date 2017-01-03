<template>

    <div>
    <div class="tabs">
    <ul class="nav nav-tabs" >
        <li v-for="tab in tabs" :class="{'is-active': tab.isActive}" >
            <a href="#" @click="selectTab(tab)"> {{tab.name}} </a>
        </li>
    </ul>
    </div>

        <div class="tabs-details">

            <slot></slot>

        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return { tabs: [] };
        },

        created() {
            this.tabs = this.$children;
        },

        methods: {
            selectTab(selectedTab) {
                this.tabs.forEach(tab => {
                    tab.isActive = (tab === selectedTab)
            })
            }
    }
    }
</script>

<template>
        <div>
            <header :class="{'scrolled-now' : scrollPosition}">
                <nav>
                    <div class="branding">
                        <img src="/images/logo.jpeg" alt="">
                    </div>
                    <ul v-show="!mobile" class="navigation">
                        <li><router-link class="link" :to="{ name: 'Home'}">Home</router-link></li>
                        <li><router-link class="link" :to="{ name: ''}"></router-link></li>
                        <li><router-link class="link" :to="{ name: ''}"></router-link></li>
                        <li><router-link class="link" :to="{ name: ''}"></router-link></li>
                    </ul>
                    <div class="icon">
                        <i @click="toggleMobileNav" v-show="mobile" class="far fa-bars" :class="{'icon-active' : mobileNav}"></i>
                    </div>
                    <transition name="mobile-nav">
                        <ul v-show="mobileNav" class="dropdown-nav">
                            <li><router-link class="link" :to="{ name: 'Home'}">Home</router-link></li>
                            <li><router-link class="link" :to="{ name: ''}"></router-link></li>
                            <li><router-link class="link" :to="{ name: ''}"></router-link></li>
                            <li><router-link class="link" :to="{ name: ''}"></router-link></li>
                        </ul>
                    </transition>
                </nav>
            </header>
        </div>
</template>

<script>
 export default {};
</script>

<style scoped>

</style>

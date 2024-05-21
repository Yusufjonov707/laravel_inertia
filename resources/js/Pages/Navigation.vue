<template>
    <div>
        <header :class="{ 'scrolled-now': scrollPosition }">
            <nav>
                <div class="branding">
                    <img src="/images/logo.png" alt="" />
                </div>
                <ul v-show="!mobile" class="navigation">
                    <li><Link class="link" href="">Home</Link></li>
                    <li><Link class="link" href="">Statiscs</Link></li>
                    <li><Link class="link" href="">About</Link></li>
                    <li><Link class="link" href="">Contact</Link></li>
                </ul>
                <div class="lang">
                    <select name="lang" id="lang">
                        <option value="uz">Uzb</option>
                        <option value="ru">Ru</option>
                    </select>
                </div>
                <div class="icon">
                    <i
                        @click="toggleMobileNav"
                        v-show="mobile"
                        class="far fa-bars"
                        :class="{ 'icon-active': mobileNav }"
                    ></i>
                </div>
                <transition name="mobile-nav">
                    <ul v-show="mobileNav" class="dropdown-nav">
                        <li>
                            <router-link class="link" :to="{ name: 'Home' }"
                                >Home</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="link"
                                :to="{ name: '' }"
                            ></router-link>
                        </li>
                        <li>
                            <router-link
                                class="link"
                                :to="{ name: '' }"
                            ></router-link>
                        </li>
                        <li>
                            <router-link
                                class="link"
                                :to="{ name: '' }"
                            ></router-link>
                        </li>
                    </ul>
                </transition>
            </nav>
        </header>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    name: "navigation",
    data() {
        return {
            scrollPosition: false,
            mobile: false,
            mobileNav: false,
            windowWidth: false,
        };
    },
    components: {
        Link,
    },
};
</script>

<style scoped>

header {
    color: #fff;
    position: fixed;
    width: 100%;
    z-index: 99;
    transition: 0.5s ease all;
    border-bottom: 0.3px solid rgba(255, 255, 255, 0.178);

    nav {
        display: flex;
        flex-direction: row;
        padding: 12px 0;
        transition: 0.5s ease all;
        width: 90%;
        margin: 0 auto;
        @media (min-width: 1140px) {
            max-width: 1140px;
        }
        ul,
        .link {
            font-weight: 700;
            color: #fff;
            list-style: none;
            text-decoration: none;
        }
        li {
            text-transform: uppercase;
            padding: 11px;
            margin: 16px 0px 0px 30px;
        }
        .link {
            font-size: 16px;
            transition: border-bottom 0.3s ease; /* Correct transition specification */
            padding-bottom: 4px;
            border-bottom: 1px solid transparent;
        }

        .link:hover {
            border-bottom: 1px solid #fff;
        }
        }
        .branding {
            display: flex;
            align-items: center;
            margin-left: -250px;
            img {
                width: 100px;
                transition: 0.5 ease all;
            }
        }
        .navigation {
            margin-left: 150px;
            display: flex;
            text-align: right;
            flex: 1;
            justify-content: flex-start;
        }
        #lang {
            margin-top: 12px;
            width: 70px;
            height: 40px;
            font-weight: 700;
            background-color: transparent; /* Make the background transparent */
            padding: 10px; /* Optional: Add some padding for better appearance */
            color: #ffffff; /* Optional: Set the text color */
        }

        #lang option {
            background-color: #fff; /* Set a different background for the options if needed */
            color: #000000; /* Set the text color for options */
        }
    }
</style>

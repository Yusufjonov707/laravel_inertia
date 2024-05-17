<template>
    <div class="home">
        <section class="hero">
            <div class="hero-text container">
                <div class="hero-content">
                    <h4>Vue Responsive Nav menu</h4>
                    <hr />
                    <h2>
                        With Vue <br />
                        Anmimations
                    </h2>
                    <hr />
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "Main",
    components: {},
};
</script>

<style scoped>
.hero {
    background-image: url("/images/hero-bg.jpeg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover; /* This will ensure the image covers the entire element */
    background-position: center;
    position: relative;
    height: 100vh;

    img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .hero-text {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;

        h4 {
            text-transform: uppercase;
            font-size: 22px;
            padding-bottom: 4px;
        }

        h2 {
            font-size: 50px;
            @media (min-width: 550px) {
                font-size: 80px;
            }
        }

        hr:nth-child(2) {
            max-width: 365px;
            margin-bottom: 16px;
        }
        hr:nth-child(4) {
            height: 6px;
            background-color: #fff;
            border: none;
            max-width: 85px;
            margin-top: 16px;
        }
    }
}
.hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Black color with 50% opacity */
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2; /* Ensures the content appears above the overlay */
}
</style>

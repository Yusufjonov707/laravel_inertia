<template>
    <div class="home">
        <Navigation></Navigation>
        <section class="hero">
            <div class="hero-text container">
                <div class="hero-content">
                    <h2>Korxona va tashkilotlar, tovar belgilari <br>to'g'risidagi ma'lumotlar</h2>

                    <h5>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A cum pariatur aspernatur beatae nisi veniam?
                    </h5>
                    <div class="input-section mt-5">
                        <select name="type" id="">
                            <option value="">Search type</option>
                        </select>
                        <input type="text">
                        <button>Hello</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "Main",
};
</script>

<style scoped>
.hero {
    background-image: url("/images/hero-bg.jpeg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-position: center;
    position: relative;
    height: 100vh;

    img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    .hero-content{
        top: -17vh;
        width: 75%;
        margin: auto;
    }
    .hero-text {
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column-reverse;
        justify-content: center;
        color: #fff;

        h2 {
            font-size: 30px;
            @media (min-width: 550px) {
                font-size: 40px;
            }
            font-weight: 700;
        }
        h5{
            color: #ffffff86;
            margin-top: 20px;
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
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
}
</style>

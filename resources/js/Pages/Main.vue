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
                    <div class="input-section">
                        <select name="type" id="">
                            <option value="">Search type</option>
                        </select>
                        <input type="text" placeholder="Search type here">
                        <button>Button</button>
                    </div>
                    <div class="most-searched">
                        <span v-for="searched in mostSearched"> <img src="/images/Magnifer.png" style="width:16px; height:16px" alt=""> {{ searched }} </span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "Main",
    props: {
        mostSearched: Object
    },
};
</script>

<style scoped>
.most-searched {
    margin: 1rem auto ;
    width: 100%;
    max-width: 600px;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
.most-searched span {
    background-color: rgba(255, 255, 255, 0.2);
    padding: 0.5rem;
    margin: 0.25rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.most-searched span:hover {
    background-color: rgba(255, 255, 255, 0.5);
}
.input-section {
    margin-top: 5rem;
    width: 1100px;
    background-color: rgb(255, 255, 255);
    display: flex;
    justify-content: center;
    align-items: center;
}
.input-section select,
.input-section input,
.input-section button {
    padding: 0.75rem;
    border: none;
    font-size: 1rem;
}
.input-section ,
.input-section input {
    flex: 1;
    max-width: 100%;
    margin-right: -4px;
}
.input-section select {
    background-color: #ffffff;
}
.input-section input {
    background-color: #fff;
    outline: none;
}
.input-section button {
    gap: 10px;
    width: 200px;
    height: 45px;
    top: 542px;

    /* infocolor */
    background: linear-gradient(245.47deg, #0085FF 0%, #002265 99.36%);
    color: #fff;
    font-weight: 700;
    margin: 5px;
}
.input-section select:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-section input {
    border-radius: 0;
}
.input-section button {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
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
        top: -10vh;
        width: 90%;
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

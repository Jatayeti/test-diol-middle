<template>
    <div class="card" v-if="product">
        <img :src="product.image" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{product.name}}</h5>

            <p v-if="product.in_stock" class="card-text text-success">В наличии</p>
            <p v-else class="card-text text-danger">Нет в наличии</p>

            <p class="card-text">{{product.price}} RUB</p>

            <button v-if="!product.in_cart && product.in_stock"
                    class="btn btn-success add-to-cart-btn"
                    @click="addToCart(product)"
            >
                В корзину
            </button>

            <button v-if="product.in_cart && product.in_stock"
                    class="btn btn-danger"
                    @click="removeFromCart(product)"
            >
                Убрать
            </button>

            <a :href="`/products/${product.id}`" class="btn btn-link">Подробнее</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ProductCard",

        props: ['productData'],

        data() {
            return {
                product: null
            }
        },

        methods: {
            addToCart(product) {
                axios.get(`/cart/toggle/${product.id}`)
                    .then(() => {
                        product.in_cart = true
                        alert('Котик добавлен в корзину')
                    })
            },

            removeFromCart(product) {
                axios.get(`/cart/remove/${product.id}`)
                    .then(() => {
                        product.in_cart = false
                        alert('Котик убран с корзины')
                    })
            }
        },

        mounted() {
            this.product = this.productData
        }
    }
</script>

<style scoped>

</style>

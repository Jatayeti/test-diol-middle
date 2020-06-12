<template>
    <div class="container product-view mb-5" v-if="product">
        <div class="row">
            <div class="col-md-6 media">
                <img :src="product.image" alt="">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ product.name }}</h5>
                        <p class="card-text">{{ product.price }} RUB</p>
                        <p class="card-text text-success" v-if="product.in_stock">В наличии</p>
                        <p class="card-text text-danger" v-else>Нет в наличии</p>
                        <p class="card-text" v-html="product.des"></p>

                        <a href="#" class="btn btn-success"
                           v-if="product.in_stock && !product.in_cart"
                           @click="addToCart(product)">Добавить в корзину</a>
                        <a href="#" class="btn btn-danger"
                           v-if="product.in_stock && product.in_cart"
                           @click="removeFromCart(product)">Убрать из корзину</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ProductView",
        props: ['productData'],
        data () {
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

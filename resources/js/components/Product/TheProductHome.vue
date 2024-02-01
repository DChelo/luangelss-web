<template>
    <section class="d-flex flex-wrap justify-content-center">

        <div v-for="(product, index) in products" :key="index">
            <div class="card mx-2 my-3 card_size">
                <div class="card-body">
                    <h5 class="card-title">{{ product.name }}</h5>
                    <p class="card-text mt-3">{{ product.description }}</p>
                    <div class="d-flex flex-wrap">
                        <span class="mt-2 w-100">
                            <strong>Categoria:</strong> {{ product.category.name }}
                        </span>

                        <span class="mt-2 my-3">
                            <strong>Disponibles:</strong> {{ product.stock }}
                        </span>
                    </div>
                    <div class="">
                        <div class="d-grid gap-2 mt-2 mx-4">
                            <button class="btn btn-outline-primary" type="button">
                                Comprar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</template>

<script>
export default {
    props: ['products'],

    data(){

    },
    mounted(){
        this.index()
    },
    methods: {

    },
}
</script>

<style lang="scss" scoped></style>

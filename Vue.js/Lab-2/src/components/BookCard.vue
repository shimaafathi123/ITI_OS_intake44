<template>
  <div class="card mb-4 h-100 mt-3 shadow-sm">
    <img
      :src="book.image"
      class="card-img-top"
      alt="Book Cover"
      style="width: 350px; height: 250px; object-fit: fill"
    />
    <div class="card-body d-flex flex-column justify-content-between">
      <h5 class="card-title text-center">{{ book.name }}</h5>
      <div class="d-flex justify-content-between">
        <div>
          <p class="card-text"><strong>Author:</strong> {{ book.author }}</p>
          <p class="card-text">
            <strong>Category:</strong> {{ book.category }}
          </p>
        </div>
        <div>
          <div v-if="book.numberOfPages < 50" class="less">
            <p class="card-text">
              <strong>Pages:</strong> {{ book.numberOfPages }}
            </p>
          </div>
          <div v-else class="more">
            <p class="card-text">
              <strong>Pages:</strong> {{ book.numberOfPages }}
            </p>
          </div>
          <p class="card-text">
            <strong>Price:</strong> {{ formatPrice(book.price) }}
          </p>
        </div>
      </div>
      <a
        href="#"
        @click.prevent
        class="btn btn-primary mt-3 align-self-center"
        @click="addToWishlist(book)"
        >Add to Wish List</a
      >
    </div>
  </div>
</template>

<script>
export default {
  props: ["book", "addToWishlist", "formatPrice"],
  mounted() {
    console.log(this.book.image);
  },
};
</script>

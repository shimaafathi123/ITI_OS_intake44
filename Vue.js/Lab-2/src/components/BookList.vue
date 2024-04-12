<template>
  <div>
    <ul class="list-group mb-3">
      <li
        class="list-group-item"
        v-for="book in books"
        :key="book.id"
        :title="book.author"
      >
        {{ book.name }}
      </li>
    </ul>
    <h1>Our Books</h1>
    <hr />
    <div class="row justify-content-center">
      <div class="col-md-4 mb-4" v-for="book in books" :key="book.id">
        <BookCard
          :book="book"
          :addToWishlist="addToWishlist"
          :formatPrice="formatPrice"
        />
      </div>
    </div>
  </div>
</template>

<script>
import BookCard from "./BookCard.vue";

export default {
  components: {
    BookCard,
  },
  props: ["books", "addToWishlist", "formatPrice"],
};
</script>

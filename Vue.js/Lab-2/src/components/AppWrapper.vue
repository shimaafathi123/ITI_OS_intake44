<template>
  <div class="container mt-5">
    <NavBar @toggleWishlist="toggleWishlist" />
    <BookList
      v-if="!isWishListVisible"
      :books="books"
      :addToWishlist="addToWishlist"
      :formatPrice="formatPrice"
    />
    <WishList
      v-if="isWishListVisible"
      :wishlist="wishlist"
      :formatPrice="formatPrice"
      :removeFromWishlist="removeFromWishlist"
    />
  </div>
</template>

<script>
import NavBar from "./NavBar.vue";
import BookList from "./BookList.vue";
import WishList from "./WishList.vue";
import { books } from "../booksData"; // Importing the books data

export default {
  components: {
    NavBar,
    BookList,
    WishList,
  },
  data() {
    return {
      books: books, // Using the imported books data
      wishlist: [],
      isWishListVisible: false,
    };
  },
  methods: {
    addToWishlist(book) {
      if (!this.wishlist.some((item) => item.id === book.id)) {
        this.wishlist.push(book);
      } else {
        alert("Book is already in the wishlist!");
      }
    },
    removeFromWishlist(book) {
      const index = this.wishlist.findIndex((item) => item.id === book.id);
      if (index !== -1) {
        this.wishlist.splice(index, 1);
      }
    },
    formatPrice(price) {
      return new Intl.NumberFormat("ar-SA", {
        style: "currency",
        currency: "SAR",
      }).format(price);
    },
    toggleWishlist() {
      this.isWishListVisible = !this.isWishListVisible;
    },
  },
};
</script>

<style>
.more {
  color: green;
  font-weight: 600;
}
.less {
  color: red;
  font-weight: 600;
}
</style>

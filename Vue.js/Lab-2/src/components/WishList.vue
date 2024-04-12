<template>
  <div class="mt-4">
    <h3>Wishlist</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Author</th>
          <th scope="col">Price</th>
          <th scope="col">Category</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="book in wishlist" :key="book.id">
          <td>{{ book.name }}</td>
          <td>{{ book.author }}</td>
          <td>{{ formatPrice(book.price) }}</td>
          <td>{{ book.category }}</td>
          <td>
            <button
              class="btn btn-danger btn-sm"
              @click="removeFromWishlist(book)"
            >
              Delete
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: ["wishlist", "formatPrice", "removeFromWishlist"],
};
</script>

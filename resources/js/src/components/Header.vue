<template>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
      <router-link class="navbar-brand" :to="{name:'home'}">Blog</router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <router-link class="nav-link" :to="{name:'home'}">Home <span class="sr-only">(current)</span></router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{name: 'post-list'}">Posts</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{name: 'category-list'}">Category</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{name: 'user-list'}">Users</router-link>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  User
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </form>

      </div>
      </nav>
</template>

<script>
    export default {
        name: "Header",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

import HomePage from '../pages/Home.vue'
export const Home = {
    path: '/home',
    name: 'home',
    component: HomePage
}

import UserListPage from '../pages/user/list.vue'
import UserEditPage from '../pages/user/edit.vue'
export const UserList = {
    path: '/user/list',
    name: 'user-list',
    component: UserListPage
}
export const UserEdit = {
    path: '/user/{id}/edit',
    name: 'user-edit',
    component: UserEditPage
}
export const UserCreate = {
    path: '/user/create',
    name: 'user-create',
    component: UserEditPage
}

import PostListPage from '../pages/post/list.vue'
import PostEditPage from '../pages/post/edit.vue'
export const PostList = {
    path: '/post/list',
    name: 'post-list',
    component: PostListPage
}
export const PostEdit = {
    path: '/post/{id}/edit',
    name: 'post-edit',
    component: PostEditPage
}
export const PostCreate = {
    path: '/post/create',
    name: 'post-create',
    component: PostEditPage
}

import CategoryListPage from '../pages/category/list.vue'
export const CategoryList = {
    path: '/category/list',
    name: 'category-list',
    component: CategoryListPage
}

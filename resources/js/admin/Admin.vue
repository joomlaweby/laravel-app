<template>
    <div>
        <nav>
            <router-link to="/admin/">Dashboard</router-link>
            <router-link to="/admin/users">Users</router-link>
            <router-link to="/admin/comments">Comments</router-link>
            <router-link to="/admin/articles">Articles</router-link>
            <router-link to="/admin/categories">Categories</router-link>
        </nav>
        <div>
            <router-view />
        </div>
    </div>
</template>

<script>
export default {}
</script>

<style>

</style>

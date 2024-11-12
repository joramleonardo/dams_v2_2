<template>
    <main>
        <Header />
        <div id="wrapper">
            <Sidebar />
                <main>
                    <router-view> </router-view>
                </main>
        </div>
    </main>
</template>

<script>
    import Header from './Header.vue';
    import Sidebar from './Ticket-Sidebar-Admin.vue';
    import Footer from './Footer.vue';

    export default { 
        components: {
            Header,
            Sidebar,
            Footer
        }

    }
</script>
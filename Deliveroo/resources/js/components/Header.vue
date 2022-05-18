<template>
    <div class="container-fluid container-header">
        <div class="row">
            <div class="col-lg-10 col-md-11 col-sm-12 m-auto">
                <nav class="py-2 box-nav">
                    <ul class="nav ">
                        <li>
                            <img class="logo img-fluid" src="../assets/images/LOGO_DELIVEBOO.png" alt="logo">
                        </li>
                        <li class="nav-item">
                            <!-- LINK NON FUNZIONANTE -- DEVE RIPORTARE ALLA HOME -->
                            <a class="text-white nav-link logo-header" href="/home">Deliveboo</a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li v-for="(link, index) in navLinks" :key="index" class="nav-item">
                            <router-link class="text-white btn-header" aria-current="page" :to="{name: link.to}">{{ link.name }}</router-link>
                        </li>
                        <li>
                            <a class="btn-header" href="/admin">Accedi o Registrati</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Header',
    data() {
        return {
            navLinks: [
                {
                    to : 'home',
                    name : 'Home',
                },
                {
                    to : 'menu',
                    name : 'Menù',
                },
            ]
        }
    },
}
</script>

<style scoped lang="scss">

@import '../../sass/_variables.scss';

    .container-header {
        background-color: #FF4718;
        position: fixed;
        z-index: 4;
        top: 0;
        height: 70px;
        border-bottom: 1px $body-bg solid;

        .box-nav {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;

            .logo {
                max-height: 50px;
            }

            .logo-header {
                font-size: 21px;
                @include title-font;
            }
        }

        .btn-header {
            display: inline-block;
            background-color: #9538f2;
            padding: 6px 16px;
            text-decoration: none;
            font-weight: bold;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 0 #7633b9;
            transition: all 0.3s;
            margin-left: 10px;
            @include title-font;
        }

        .btn-header:hover {
            transform: translateY(2px);
            box-shadow: 0 2px 0 #9538f2;
        }
    }

</style>>



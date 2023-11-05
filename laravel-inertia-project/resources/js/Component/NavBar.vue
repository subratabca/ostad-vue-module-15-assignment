<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <Link  class="nav-link active" href="/">Home</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link" href="/Page1">Page1</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link" href="/Page2">Page2</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link" href="/Page3">Page3</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link" href="/Page4">Page4</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link" href="/Page5">Page5</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link" href="/Page6">Page6</Link >
                    </li>

                    <li class="nav-item">
                        <Link  class="nav-link" href="/Page7">Page7</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link" href="/Page8">Page8</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link"  href="/Page9" preserve-scroll>Page9</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link"  href="/Page10" preserve-scroll>Page10</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link"  href="/Page11">Page11</Link >
                    </li>
                    <li class="nav-item">
                        <Link  class="nav-link"  href="/Page12">Page12</Link >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

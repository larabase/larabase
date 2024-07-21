<template>
  <Layout>
    <Head title="Home" />

    <div class="app-content-area">
      <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
      <div class="container-fluid mt-n22">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="d-flex justify-content-between align-items-center mb-5">
              <div class="mb-2 mb-lg-0">
                <h3 class="mb-0 text-white">Projects</h3>
              </div>
              <div>
                <a href="#" class="btn btn-white">Create New Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Layout>
</template>

<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import Layout from "@/layouts/App/App.vue";
</script>

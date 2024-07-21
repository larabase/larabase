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
                <h3 class="mb-0 text-white">Tableau de board</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lift">
              <!-- card body -->
              <div class="card-body">
                <!-- heading -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div>
                    <h4 class="mb-0">Total élèves</h4>
                  </div>
                  <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                    <i class="mdi mdi-account-school-outline text-[22px]"></i>
                  </div>
                </div>
                <!-- project number -->
                <div class="lh-1">
                  <h1 class="mb-1 fw-bold">4705</h1>
                  <p class="mb-0"><span class="text-dark me-2">2946</span>Soldés</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lift">
              <!-- card body -->
              <div class="card-body">
                <!-- heading -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div>
                    <h4 class="mb-0">Total parents</h4>
                  </div>
                  <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                    <i class="mdi mdi-account-child-outline text-[22px]"></i>
                  </div>
                </div>
                <!-- project number -->
                <div class="lh-1">
                  <h1 class="mb-1 fw-bold">783</h1>
                  <!-- <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lift">
              <!-- card body -->
              <div class="card-body">
                <!-- heading -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div>
                    <h4 class="mb-0">Total enseignants</h4>
                  </div>
                  <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                    <i class="mdi mdi-account-tie-outline text-[22px]"></i>
                  </div>
                </div>
                <!-- project number -->
                <div class="lh-1">
                  <h1 class="mb-1 fw-bold">16</h1>
                  <p class="mb-0"><span class="text-dark me-2">13</span>Disponible</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lift">
              <!-- card body -->
              <div class="card-body">
                <!-- heading -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div>
                    <h4 class="mb-0">Total administrateurs</h4>
                  </div>
                  <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                    <i class="mdi mdi-account-group-outline text-[22px]"></i>
                  </div>
                </div>
                <!-- project number -->
                <div class="lh-1">
                  <h1 class="mb-1 fw-bold">5</h1>
                  <p class="mb-0"><span class="text-dark me-2">3</span>Actifs</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="mb-0">Calendrier scolaire</h3>
                <p class="mb-0 text-muted">Repertorie tous les evènements scolaires et dates importantes</p>
              </div>
              <div class="card-body">
                <div ref="calendarElm" style="height: 600px"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Layout>
</template>

<script setup lang="ts">
import { onMounted, ref } from "vue";
import { Head } from "@inertiajs/vue3";
import Calendar from "@toast-ui/calendar";

import Layout from "@/layouts/App/App.vue";

import "@toast-ui/calendar/dist/toastui-calendar.min.css";

const calendarElm = ref<HTMLDivElement>();
const calendar = ref<Calendar>();

onMounted(() => {
  calendar.value = new Calendar(calendarElm.value, {
    defaultView: "week",

    template: {
      time(event) {
        const { start, end, title } = event;

        return `<span style="color: white;">${title}</span>`;
      },
      allday(event) {
        return `<span style="color: gray;">${event.title}</span>`;
      },
    },
    calendars: [
      {
        id: "cal1",
        name: "Personal",
        backgroundColor: "#03bd9e",
      },
      {
        id: "cal2",
        name: "Work",
        backgroundColor: "#00a9ff",
      },
    ],
  });
});
</script>

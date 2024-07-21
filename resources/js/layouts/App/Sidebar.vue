<template>
  <div class="app-menu">
    <div class="navbar-vertical navbar nav-dashboard">
      <div class="h-100" data-simplebar>
        <Link class="navbar-brand" :href="route('index')">
          <img :src="url('static/images/brand/logo/logo-2.svg')" alt="Laradmin" />
        </Link>
        <ul class="navbar-nav flex-column" id="sideNavbar">
          <li class="nav-item">
            <Link class="nav-link has-arrow" :href="route('index')">
              <i class="nav-icon mdi mdi-home-outline text-base me-2"></i>
              Accueil
            </Link>
          </li>
          <li class="nav-item">
            <div class="navbar-heading">Administration</div>
          </li>
          <li class="nav-item">
            <a
              class="nav-link has-arrow collapsed"
              href="#!"
              data-bs-toggle="collapse"
              data-bs-target="#navMenuDatas"
              aria-expanded="false"
              aria-controls="navMenuDatas"
            >
              <i class="nav-icon mdi mdi-database-outline me-2"></i>
              Données
            </a>
            <div id="navMenuDatas" class="collapse" data-bs-parent="#sideNavbar">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <Link class="nav-link" :href="route('datas.years')">Années scolaires</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('datas.levels')">Niveaux scolaires</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('datas.subjects')">Matières scolaires</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('datas.fees')">Frais scolaires</Link>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a
              class="nav-link has-arrow collapsed"
              href="#!"
              data-bs-toggle="collapse"
              data-bs-target="#navMenuStudents"
              aria-expanded="false"
              aria-controls="navMenuStudents"
            >
              <i class="nav-icon mdi mdi-account-school-outline me-2"></i>
              Élèves
            </a>
            <div id="navMenuStudents" class="collapse" data-bs-parent="#sideNavbar">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <Link class="nav-link" :href="route('students.add')">Ajouter un élève</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('students')">Gérer les élèves</Link>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a
              class="nav-link has-arrow collapsed"
              href="#!"
              data-bs-toggle="collapse"
              data-bs-target="#navMenuTeachers"
              aria-expanded="false"
              aria-controls="navMenuTeachers"
            >
              <i class="nav-icon mdi mdi-account-tie-outline me-2"></i>
              Enseignants
            </a>
            <div id="navMenuTeachers" class="collapse" data-bs-parent="#sideNavbar">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <Link class="nav-link" :href="route('teachers.add')">Ajouter un enseignant</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('teachers')">Gérer les enseignants</Link>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a
              class="nav-link has-arrow collapsed"
              href="#!"
              data-bs-toggle="collapse"
              data-bs-target="#navMenuParents"
              aria-expanded="false"
              aria-controls="navMenuParents"
            >
              <i class="nav-icon mdi mdi-account-child-outline me-2"></i>
              Parents
            </a>
            <div id="navMenuParents" class="collapse" data-bs-parent="#sideNavbar">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <Link class="nav-link" :href="route('parents.add')">Ajouter un parent</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('parents')">Gérer les parents</Link>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <div class="navbar-heading">Enseignements</div>
          </li>
          <li class="nav-item">
            <Link class="nav-link has-arrow" :href="route('timetables')">
              <i class="nav-icon mdi mdi-calendar-multiselect-outline me-2"> </i>
              Emplois du temps
            </Link>
          </li>
          <li class="nav-item">
            <a
              class="nav-link has-arrow collapsed"
              href="#"
              data-bs-toggle="collapse"
              data-bs-target="#navMenuClasses"
              aria-expanded="false"
              aria-controls="navMenuClasses"
            >
              <i class="nav-icon mdi mdi-google-classroom me-2"> </i>
              Classes
            </a>
            <div id="navMenuClasses" class="collapse" data-bs-parent="#sideNavbar">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <Link class="nav-link" :href="route('classes.add')">Ajouter une classe</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('classes')">Gérer les classes</Link>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <div class="navbar-heading">Comptabilité</div>
          </li>
          <li class="nav-item">
            <Link class="nav-link has-arrow" :href="route('accounting')">
              <i class="nav-icon mdi mdi-wallet-outline me-2"></i>
              Solde
            </Link>
          </li>
          <li class="nav-item">
            <a
              class="nav-link has-arrow collapsed"
              href="#"
              data-bs-toggle="collapse"
              data-bs-target="#navMenuLevel"
              aria-expanded="false"
              aria-controls="navMenuLevel"
            >
              <i class="nav-icon mdi mdi-cash-multiple me-2"></i>
              Paiements
            </a>
            <div id="navMenuLevel" class="collapse" data-bs-parent="#sideNavbar">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <Link class="nav-link" :href="route('payments.add')">Ajouter un paiement</Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link" :href="route('payments')">Gérer les paiements</Link>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <Link class="nav-link has-arrow" :href="route('invoices')">
              <i class="nav-icon mdi mdi-invoice-text-multiple-outline me-2"></i>
              Reçus
            </Link>
          </li>

          <li class="nav-item">
            <div class="navbar-heading">Autres</div>
          </li>
          <li class="nav-item">
            <Link class="nav-link" :href="route('users')">
              <i class="nav-icon mdi mdi-account-group-outline me-2"></i>
              Utilisateurs
            </Link>
          </li>
          <li class="nav-item">
            <Link class="nav-link" :href="route('settings')">
              <i class="nav-icon mdi mdi-cog-outline me-2"></i>
              Paramètres
            </Link>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { route } from "ziggy-js";
import { url } from "@/helpers/utils";
</script>

<template>
  <div class="app-menu">
    <div class="navbar-vertical navbar nav-dashboard">
      <div class="h-100" data-simplebar>
        <a class="navbar-brand" href="#">
          <img :src="url('static/images/brand/logo/logo-2.svg')" alt="Laradmin" />
        </a>
        <ul class="navbar-nav flex-column" id="sideNavbar">
          <li class="nav-item">
            <a class="nav-link has-arrow" href="#">
              <i class="nav-icon mdi mdi-home-outline text-base me-2"> </i>
              Accueil
            </a>
          </li>
          <li class="nav-item">
            <div class="navbar-heading">Apps</div>
          </li>
          <li class="nav-item">
            <a class="nav-link has-arrow" href="#">
              <i data-feather="calendar" class="nav-icon me-2 icon-xxs"> </i>
              Années scolaires
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link has-arrow" href="#">
              <i class="nav-icon me-2 icon-xxs"> </i>
              Classes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i data-feather="folder-plus" class="nav-icon me-2 icon-xxs"></i>
              File Manager
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link has-arrow collapsed"
              href="#!"
              data-bs-toggle="collapse"
              data-bs-target="#navMenuLevel"
              aria-expanded="false"
              aria-controls="navMenuLevel"
            >
              <i data-feather="corner-left-down" class="nav-icon me-2 icon-xxs"> </i>
              Menu Level
            </a>
            <div id="navMenuLevel" class="collapse" data-bs-parent="#sideNavbar">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a
                    class="nav-link has-arrow"
                    href="#!"
                    data-bs-toggle="collapse"
                    data-bs-target="#navMenuLevelSecond"
                    aria-expanded="false"
                    aria-controls="navMenuLevelSecond"
                  >
                    Two Level
                  </a>
                  <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="#!"> NavItem 1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#!"> NavItem 2</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link has-arrow collapsed"
                    href="#!"
                    data-bs-toggle="collapse"
                    data-bs-target="#navMenuLevelThree"
                    aria-expanded="false"
                    aria-controls="navMenuLevelThree"
                  >
                    Three Level
                  </a>
                  <div id="navMenuLevelThree" class="collapse" data-bs-parent="#navMenuLevel">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a
                          class="nav-link collapsed"
                          href="#!"
                          data-bs-toggle="collapse"
                          data-bs-target="#navMenuLevelThreeOne"
                          aria-expanded="false"
                          aria-controls="navMenuLevelThreeOne"
                        >
                          NavItem 1
                        </a>
                        <div id="navMenuLevelThreeOne" class="collapse" data-bs-parent="#navMenuLevelThree">
                          <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link" href="#!">NavChild Item 1</a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Nav Item 2</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { url } from "@/helpers/utils";
</script>

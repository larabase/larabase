<template>
  <div class="header">
    <div class="navbar-custom navbar navbar-expand-lg">
      <div class="container-fluid px-0">
        <a class="navbar-brand d-block d-md-none" href="#">
          <img :src="url('static/images/brand/logo/logo-2.svg')" alt="Logo" />
        </a>

        <a id="nav-toggle" href="#" class="ms-auto ms-md-0 me-0 me-lg-3">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="28"
            height="28"
            fill="currentColor"
            class="bi bi-text-indent-left text-muted"
            viewBox="0 0 16 16"
          >
            <path
              d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
            />
          </svg>
        </a>

        <div class="d-none d-md-none d-lg-block">
          <form action="#">
            <div class="input-group">
              <input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search" />
              <span class="input-group-append">
                <button class="btn ms-n10 rounded-0 rounded-end" type="button">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="15"
                    height="15"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-search text-dark"
                  >
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  </svg>
                </button>
              </span>
            </div>
          </form>
        </div>

        <ul class="navbar-nav navbar-right-wrap ms-lg-auto d-flex nav-top-wrap align-items-center ms-4 ms-lg-0">
          <li class="dropdown stopevent ms-2">
            <a href="#" class="form-check form-switch theme-switch btn btn-ghost btn-icon rounded-circle mb-0">
              <input
                class="form-check-input"
                type="checkbox"
                id="flexSwitchCheckDefault"
                role="switch"
                aria-checked="false"
              />
              <label class="form-check-label" for="flexSwitchCheckDefault"></label>
            </a>
          </li>

          <li class="dropdown stopevent ms-2">
            <a
              class="btn btn-ghost btn-icon rounded-circle"
              href="#!"
              role="button"
              id="dropdownNotification"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="mdi mdi-bell-outline text-base"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="dropdownNotification">
              <div>
                <div class="border-bottom px-3 pt-2 pb-3 d-flex justify-content-between align-items-center">
                  <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                  <a href="#!" class="text-muted">
                    <span>
                      <i class="me-1 icon-xs" data-feather="settings"></i>
                    </span>
                  </a>
                </div>
                <div data-simplebar style="height: 250px">
                  <ul class="list-group list-group-flush notification-list-scroll">
                    <li class="list-group-item bg-light">
                      <a href="#!" class="text-muted">
                        <h5 class="mb-1">Rishi Chopra</h5>
                        <p class="mb-0">Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.</p>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#!" class="text-muted">
                        <h5 class="mb-1">Neha Kannned</h5>
                        <p class="mb-0">
                          Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.
                        </p>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#!" class="text-muted">
                        <h5 class="mb-1">Nirmala Chauhan</h5>
                        <p class="mb-0">
                          Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.
                        </p>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#!" class="text-muted">
                        <h5 class="mb-1">Sina Ray</h5>
                        <p class="mb-0">Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu diam.</p>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="border-top px-3 py-2 text-center">
                  <a href="#!" class="text-inherit"> View all Notifications </a>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown ms-2">
            <a
              class="rounded-circle"
              href="#"
              role="button"
              id="dropdownUser"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <div class="avatar avatar-md avatar-indicators avatar-online">
                <img alt="avatar" :src="url('static/images/avatar/avatar-11.jpg')" class="rounded-circle" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
              <div class="px-4 pb-0 pt-2">
                <div class="lh-1">
                  <h5 class="mb-1">John E. Grainger</h5>
                  <a href="#" class="text-inherit fs-6">View my profile</a>
                </div>
                <div class="dropdown-divider mt-3 mb-2"></div>
              </div>
              <ul class="list-unstyled">
                <li>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-account me-2 dropdown-item-icon"></i>Edit Profile
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-history me-2 dropdown-item-icon"></i>Historique d'activité
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cog-outline me-2 dropdown-item-icon"></i>Paramètres
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout me-2 dropdown-item-icon"></i>Déconnexion
                  </a>
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

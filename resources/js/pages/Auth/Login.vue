<template>
  <Layout>
    <Head title="Connexion" />

    <div class="card smooth-shadow-md">
      <div class="card-body p-6">
        <div class="mb-4">
          <a :href="url('/')">
            <img :src="url('static/images/brand/logo/logo-2.svg')" class="mb-2 text-inverse" alt="Logo" />
          </a>
          <p class="mb-6">Please enter your user information.</p>
        </div>
        <!-- Form -->
        <form>
          <!-- Username -->
          <div class="mb-3">
            <label for="email" class="form-label">Username or email</label>
            <input
              type="email"
              id="email"
              class="form-control"
              name="email"
              placeholder="Email address here"
              required
            />
          </div>
          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              id="password"
              class="form-control"
              name="password"
              placeholder="**************"
              required
            />
          </div>
          <!-- Checkbox -->
          <div class="d-lg-flex justify-content-between align-items-center mb-4">
            <div class="form-check custom-checkbox">
              <input type="checkbox" class="form-check-input" id="rememberme" />
              <label class="form-check-label" for="rememberme"> Remember me </label>
            </div>
          </div>
          <div>
            <!-- Button -->
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>

            <div class="d-md-flex justify-content-between mt-4">
              <div class="mb-2 mb-md-0">
                <a :href="url('register')" class="fs-5">Create An Account</a>
              </div>
              <div>
                <a :href="url('forget-password')" class="text-inherit fs-5">Forgot your password?</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </Layout>
</template>

<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { url } from "@/helpers/utils";

import Layout from "@/layouts/Auth/Auth.vue";
</script>

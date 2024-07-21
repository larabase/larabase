import { Axios } from "axios";
import { route as routeFn } from "ziggy-js";

declare global {
  interface Window {
    axios: Axios;
    route: typeof routeFn;
  }
}

export function url(path: string) {
  if (import.meta.env.MODE === "production") {
    return "/" + path.trim();
  }
  return import.meta.env.BASE_URL + path.trim();
}

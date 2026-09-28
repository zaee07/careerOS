// 1. Eksekusi langsung untuk set tema ke <html> sebelum DOM selesai dimuat (Mencegah FOUC)
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
    // console.log(1);
} else {
    document.documentElement.classList.remove("dark");
    // console.log(2);
}

// 2. Jalankan logika event listener setelah DOM siap
document.addEventListener("DOMContentLoaded", function () {
    const themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
    const themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");
    const themeToggleBtn = document.getElementById("theme-toggle");

    // Atur visibilitas awal ikon
    if (document.documentElement.classList.contains("dark")) {
        themeToggleLightIcon?.classList.remove("hidden");
    console.log(1);
    } else {
        themeToggleDarkIcon?.classList.remove("hidden");
    console.log(2);
    }

    // Toggle saat tombol diklik
    themeToggleBtn?.addEventListener("click", function () {
        themeToggleDarkIcon?.classList.toggle("hidden");
        themeToggleLightIcon?.classList.toggle("hidden");

        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
    console.log(1);
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
    console.log(2);
        }
    });
});
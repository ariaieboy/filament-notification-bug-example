export default function () {
    return {
        dark: this.$persist(window.matchMedia('(prefers-color-scheme: dark)').matches).as("rakoloTheme"),
        init() {
            this.updateScheme();
        },
        toggle() {
            this.dark = !this.dark;
            this.updateScheme()
        },
        updateScheme() {
            document.documentElement.setAttribute("data-theme", this.dark ? "dark" : "light");
            if (this.dark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    };
};

import Alpine from 'alpinejs';
// plugins
import focus from '@alpinejs/focus';
import persist from '@alpinejs/persist';

//components
import toggleTheme from './Components/ToggleTheme';
import imageGallery from "./Components/ImageGallery";

Alpine.data('toggleTheme', toggleTheme);
Alpine.data('imageGallery', imageGallery);

//plugins
Alpine.plugin(persist);
Alpine.plugin(focus);


Alpine.directive('html', (el, {expression}, {evaluateLater, effect}) => {
    let getHtml = evaluateLater(expression)

    effect(() => {
        getHtml(html => {
            el.innerHTML = html
        });
    });
});
window.Alpine = Alpine;

Alpine.start();


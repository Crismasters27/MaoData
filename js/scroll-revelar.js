document.addEventListener('DOMContentLoaded', function () {
    const elementos = document.querySelectorAll('.revelar');

    const opcoesObservador = {
        root: null,        //observa em relação à viewport
        rootMargin: '0px',
        threshold: 0.15     //ativa quando 15% do elemento aparece
    };

    const observador = new IntersectionObserver(function (entradas, observador) {
        entradas.forEach(function (entrada) {
            if (entrada.isIntersecting) {
                entrada.target.classList.add('ativo');
                observador.unobserve(entrada.target); //anima só uma vez
            }
        });
    }, opcoesObservador);

    elementos.forEach(function (elemento) {
        observador.observe(elemento);
    });
});
# Wikipedia article analyzer

## Installation
Drop the code in htdocs.. 

## Usage
The application sorts the first 50 articles in a wiki category in order of readability.

Example Usage:
http://localhost/app/api/api.php?category=Category:Physics

The return is a json object that contains sorted data, for example:

```
[{"score":-8.5675,"title":"Epicatalysis"},{"score":-8.5675,"title":"Epicatalysis"},{"score":-7.67,"title":"Computational anatomy"},{"score":-6.7892857142857,"title":"Action angle coordinates"},{"score":3.8310149253732,"title":"Pseudo Jahn\u2013Teller effect"},{"score":5.1325,"title":"Riemannian metric and Lie bracket in computational anatomy"},{"score":7.1189393939394,"title":"Conformon"},{"score":9.3564285714286,"title":"Upconverting nanoparticles"},{"score":14.27,"title":"Bayesian model of computational anatomy"},{"score":15.602285714286,"title":"Jahn\u2013Teller effect"},{"score":17.382142857143,"title":"Statistical mechanics"},{"score":19.100304054054,"title":"Group actions in computational anatomy"},{"score":21.5635,"title":"Large deformation diffeomorphic metric mapping"},{"score":22.786911764706,"title":"Solid-state physics"},{"score":24.706785714286,"title":"Hopkinson effect"},{"score":25.99,"title":"Ned Wingreen"},{"score":26.0175,"title":"Dispersive medium"},{"score":27.888,"title":"Total position spread"},{"score":28.880625,"title":"Homeokinetics"},{"score":29.982820512821,"title":"Holography in fiction"},{"score":32.260430194805,"title":"Farris effect (rheology)"},{"score":32.558885869565,"title":"Electron heat capacity"},{"score":34.887375,"title":"Many-body theory"},{"score":35.309411764706,"title":"Blasius\u2013Chaplygin formula"},{"score":36.355646879756,"title":"Phase stretch transform"},{"score":36.549099099099,"title":"Verwey transition"},{"score":40.09,"title":"Energy well"},{"score":44.405,"title":"Diffuse field acoustic testing"},{"score":44.470157894737,"title":"Interface (matter)"},{"score":45.803026315789,"title":"Aerometer"},{"score":46.0425,"title":"Rogue wave"},{"score":47.062857142857,"title":"Plexciton"},{"score":47.410853658537,"title":"Wigner rotation"},{"score":47.596428571429,"title":"Outline of physics"},{"score":49.667725225225,"title":"Solid light"},{"score":50.795454545455,"title":"Hume Feldman"},{"score":51.790580985916,"title":"Center of percussion"},{"score":53.639285714286,"title":"Transparent wood composites"},{"score":54.4625,"title":"Weak gravity conjecture"},{"score":56.828381147541,"title":"Dirac membrane"},{"score":57.275027100271,"title":"Harmonic"},{"score":57.593817204301,"title":"Physics"},{"score":57.704742647059,"title":"Time crystal"},{"score":59.2375,"title":"Front (physics)"},{"score":62.830229885057,"title":"Cabbeling"},{"score":66.481279069767,"title":"Northwest Nuclear Consortium"},{"score":75.875,"title":"Glossary of classical physics"},{"score":206.58125,"title":"Physics OCSC"},{"score":206.58125,"title":"Portal:Physics"},{"score":206.58125,"title":"Physics Olympiad Programme in India"}]
```

## ToDo

At the moment there is no front-end. The code just contains the api.
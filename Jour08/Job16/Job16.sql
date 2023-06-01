SELECT etages.nom, salles.nom AS "Biggest Room", salles.capacite
FROM salles JOIN etages ON salles.numero = etages.numero
WHERE salles.capacite = (SELECT MAX(capacite) FROM salles);
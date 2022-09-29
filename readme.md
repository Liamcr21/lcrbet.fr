# Configuer l'environement

1. Copie colle default.env.json
2. Renommes la copie *```env.json```*
3. Changes les valeurs

```json
{
    // Le mode de l'environnement (dev|prod) (peut-être pour plus tard)
    "mode": "dev",
    "db" : {
        "host": "127.0.0.1", // Le host de ta base de donnée
        "username" : "root", // le username de t'as base de donnée
        "password": "" // Le mot de passe de ta base de donnée
    }
}
```

Créer une version que tu push manuellement sur le serveur distant, __oublies pas de changer le mode en prod__


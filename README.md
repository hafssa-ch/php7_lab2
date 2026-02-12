# LAB 2 — POO et Modélisation Métier (PHP 7)

Cours : Ingénierie Logicielle Web avec PHP 7

## 🎯 Objectif

Mettre en place un modèle métier simple en PHP 7 en appliquant :

Encapsulation

Validation métier

Relation objet–objet

Interface Repository

Simulation de persistance (FakeRepository)

Organisation type PSR-4

---
## 📁 Structure du projet
````
 project/
│
├── public/
│   └── index.php
│
└──  src/
    ├── Entity/
    │   ├── Filiere.php
    │   └── Etudiant.php
    │
    └── Repository/
        ├── RepositoryInterface.php
        └── FakeEtudiantRepository.php
````

---
## 🧩 Entités
### Filiere

id : ?int

libelle : string

Validation : id positif, libellé obligatoire

### Etudiant

id : ?int

nom : string

email : string

filiere : Filiere

Validation : nom obligatoire, email valide

## 🗄 Repository
### RepositoryInterface

Méthodes CRUD :

findAll()

findById(int $id)

save($entity)

delete(int $id)

### FakeEtudiantRepository

Stockage en mémoire (tableau)

Auto-increment simulé

CRUD complet

---
## ▶️ Exécution
php public/index.php

---
## 📊 Concepts utilisés

Typage strict (declare(strict_types=1))

Namespaces

Encapsulation

Exceptions

Repository Pattern

Architecture multicouche simplifiée

## ✅ Résultat

Création, modification, affichage et suppression d’étudiants via un repository simulé.



<img width="311" height="136" alt="image" src="https://github.com/user-attachments/assets/2c0b7b58-81ef-4578-9c46-95ec81325f20" />


Nom : _Hafssa CHKOUKED_________________
Date : __12/02/2025__________________

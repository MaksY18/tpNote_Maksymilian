<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Nelmio\Alice\Loader\NativeLoader;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Initialiser le loader d'Alice
        $loader = new NativeLoader();

        // Charger les fichiers YAML dans l'ordre approprié
        $categoryFixture = $loader->loadFile(__DIR__.'/../../fixtures/category.yaml');
        $languageFixture = $loader->loadFile(__DIR__.'/../../fixtures/language.yaml');
        $userFixture = $loader->loadFile(__DIR__.'/../../fixtures/user.yaml');
        // $topicFixture = $loader->loadFile(__DIR__.'/../../fixtures/topic.yaml');

        // Persister les catégories
        foreach ($categoryFixture->getObjects() as $object) {
            $manager->persist($object);
        }
        $manager->flush();  // Flush après catégories

        // Persister les langues
        foreach ($languageFixture->getObjects() as $object) {
            $manager->persist($object);
        }
        $manager->flush();  // Flush après langues

        // Persister les utilisateurs
        foreach ($userFixture->getObjects() as $object) {
            $manager->persist($object);
        }
        $manager->flush();  // Flush après utilisateurs

        // Persister les topics
        // foreach ($topicFixture->getObjects() as $object) {
        //     $manager->persist($object);
        // }
        // $manager->flush();  // Flush après tous les objets
    }
}

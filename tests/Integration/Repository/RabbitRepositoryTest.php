<?php

namespace Integration\Repository;

use App\Entity\Rabbit;
use App\Repository\RabbitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class RabbitRepositoryTest extends KernelTestCase
{
    private RabbitRepository $rabbitRepo;
    private EntityManagerInterface $em;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->em = self::$kernel->getContainer()->get('doctrine')->getManager();
        $this->rabbitRepo = $this->createMock(RabbitRepository::class);
    }

    public function testAdd()
    {
        $rabbit = new Rabbit();
        $rabbit->setName('Test1');
        $this->em->persist($rabbit);
        $this->em->flush();

        $rabbits = $this->rabbitRepo->findAll();

        $this->assertGreaterThan(0, $rabbits);
    }

}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211218201402 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carrinho (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, data_compra DATE NOT NULL, valor_total DOUBLE PRECISION NOT NULL, INDEX IDX_A731E3C0A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carrinho_produto (carrinho_id INT NOT NULL, produto_id INT NOT NULL, INDEX IDX_6D2BC499D363F3C2 (carrinho_id), INDEX IDX_6D2BC499105CFD56 (produto_id), PRIMARY KEY(carrinho_id, produto_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE linhas_carrinho (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE carrinho ADD CONSTRAINT FK_A731E3C0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE carrinho_produto ADD CONSTRAINT FK_6D2BC499D363F3C2 FOREIGN KEY (carrinho_id) REFERENCES carrinho (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE carrinho_produto ADD CONSTRAINT FK_6D2BC499105CFD56 FOREIGN KEY (produto_id) REFERENCES produto (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carrinho_produto DROP FOREIGN KEY FK_6D2BC499D363F3C2');
        $this->addSql('DROP TABLE carrinho');
        $this->addSql('DROP TABLE carrinho_produto');
        $this->addSql('DROP TABLE linhas_carrinho');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211223190746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produto (id INT AUTO_INCREMENT NOT NULL, unidade_id INT NOT NULL, nome VARCHAR(20) NOT NULL, descricao VARCHAR(100) DEFAULT NULL, preco_unitario DOUBLE PRECISION NOT NULL, stock DOUBLE PRECISION NOT NULL, foto VARCHAR(255) DEFAULT NULL, INDEX IDX_5CAC49D7EDF4B99B (unidade_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unidade (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produto ADD CONSTRAINT FK_5CAC49D7EDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidade (id)');
        $this->addSql('ALTER TABLE carrinho_produto DROP FOREIGN KEY FK_6D2BC499D363F3C2');
        $this->addSql('ALTER TABLE carrinho_produto ADD id INT AUTO_INCREMENT NOT NULL, ADD quantidade INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE carrinho_produto ADD CONSTRAINT FK_6D2BC499105CFD56 FOREIGN KEY (produto_id) REFERENCES produto (id)');
        $this->addSql('ALTER TABLE carrinho_produto ADD CONSTRAINT FK_6D2BC499D363F3C2 FOREIGN KEY (carrinho_id) REFERENCES carrinho (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carrinho_produto DROP FOREIGN KEY FK_6D2BC499105CFD56');
        $this->addSql('ALTER TABLE produto DROP FOREIGN KEY FK_5CAC49D7EDF4B99B');
        //$this->addSql('DROP TABLE produto');
        //$this->addSql('DROP TABLE unidade');
        $this->addSql('ALTER TABLE carrinho_produto MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE carrinho_produto DROP FOREIGN KEY FK_6D2BC499D363F3C2');
        $this->addSql('ALTER TABLE carrinho_produto DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE carrinho_produto DROP id, DROP quantidade');
        $this->addSql('ALTER TABLE carrinho_produto ADD CONSTRAINT FK_6D2BC499D363F3C2 FOREIGN KEY (carrinho_id) REFERENCES carrinho (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE carrinho_produto ADD PRIMARY KEY (carrinho_id, produto_id)');
    }
}

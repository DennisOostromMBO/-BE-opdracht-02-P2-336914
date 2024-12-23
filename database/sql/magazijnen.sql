CREATE TABLE IF NOT EXISTS magazijnen (
        Id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        ProductId INT UNSIGNED NOT NULL,
        VerpakkingsEenheid FLOAT NOT NULL,
        AantalAanwezig INT NULL,
        CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        UpdatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        CONSTRAINT FK_Product_Magazijn FOREIGN KEY (ProductId) REFERENCES products(Id) ON DELETE CASCADE
    ) ENGINE=InnoDB;


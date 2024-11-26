CREATE PROCEDURE IF NOT EXISTS create_product_per_leveranciers_table()
BEGIN
    CREATE TABLE IF NOT EXISTS Product_Per_Leveranciers (
        Id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        LeverancierId INT UNSIGNED NOT NULL, 
        ProductId INT UNSIGNED NOT NULL,    
        DatumLevering DATE NOT NULL,       
        Aantal INT NOT NULL,           
        DatumEerstVolgendeLevering DATE,
        IsActive BIT NOT NULL DEFAULT 1,   
        Comments VARCHAR(255) NULL,     
        CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        UpdatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        CONSTRAINT FK_Leverancier FOREIGN KEY (LeverancierId) REFERENCES Leveranciers(Id) ON DELETE CASCADE,
        CONSTRAINT FK_Product FOREIGN KEY (ProductId) REFERENCES Products(Id) ON DELETE CASCADE
    ) ENGINE=InnoDB;
END;
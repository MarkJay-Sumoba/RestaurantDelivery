CREATE TABLE ContactUs (
    ContactUsID INT PRIMARY KEY AUTO_INCREMENT,
    FullName VARCHAR(100) NOT NULL,
    UserEmail VARCHAR(100) NOT NULL,
    Message TEXT NOT NULL,
    Timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT UC_UserEmail UNIQUE (UserEmail) -- Ensure unique email addresses
);

INSERT INTO ContactUs (FullName, UserEmail, Message)
VALUES ('Restaurant Information', 'DeliveryChef@gmail.com', 'Address: 122 Rue Saint-Paul E, Montreal, Quebec, h2Y 1G6\nPhone: 514-123-4567');


INSERT INTO ContactUs (FullName, UserEmail, Message)
VALUES ('John Doe', 'johndoe@example.com', 'This is my message about the delivery service.');
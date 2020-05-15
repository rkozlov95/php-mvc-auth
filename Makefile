start:
	docker-compose up --build -d
init_db:
	docker-compose exec -T php php bin/install.php

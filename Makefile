
all:
	bash makedirvol.sh
	sudo docker-compose -f ./srcs/docker-compose.yml up -d
clean:
	sudo docker-compose -f srcs/docker-compose.yml down
	sudo rm -rf home/skharjo/data/wordpress
	sudo rm -rf home/skharjo/data/mariadb
fclean: clean
	sudo docker rmi -f $(sudo docker images -qa)
	sudo docker volume rm $(sudo docker volume ls -q)
	sudo docker system prune -a --force

enter:
	docker exec -ti $(CONTAINER_NAME) bash

enter_wp:
	docker exec -ti `docker ps --filter name=wordpress | grep [0-9]` bash

run:
	docker run wp

build:
	docker build -t wp srcs/wordpress/

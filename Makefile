
all:
	bash makedirvol.sh
	sudo docker-compose -f ./srcs/docker-compose.yml up -d
clean:
	docker-compose -f srcs/docker-compose.yml down
	sudo rm -rf home/skharjo/data/wordpress
	sudo rm -rf home/skharjo/data/mariadb
fclean: clean
	sudo docker rmi -f $(sudo docker images -qa)
	sudo docker volume rm $(docker volume ls -q)
	sudo docker system prune -a --force

enter:
	docker exec -ti $(CONTAINER_NAME) bash

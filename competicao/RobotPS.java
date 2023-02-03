package competicao;
import robocode.*;
import java.awt.Color;

// API help : http://robocode.sourceforge.net/docs/robocode/robocode/Robot.html

/**
 * RobotPS - a robot by (Saulo Ribeiro Ferreira e Paulo Henrique Silva Dias)
 */
public class RobotPS extends AdvancedRobot
{
	/**
	 * run: RobotPS's default behavior
	 */
	public void run() {
		// Initialization of the robot should be put here

		// After trying out your robot, try uncommenting the import at the top,
		// and the next line:

		// setColors(Color.red,Color.blue,Color.green); // body,gun,radar
		setBodyColor(Color.black);
		setRadarColor(Color.red);
		setGunColor(Color.blue);
		setScanColor(Color.yellow);
		// Robot main loop
		while(true) {
			// Replace the next 4 lines with any behavior you would like
			//ahead(100);
			//turnGunRight(360);
			//back(100);
			//turnGunLeft(360);
			
			ahead(100);
			setTurnRight(80);
			setTurnGunRight(360);			
			back(100);
			setTurnRight(80);
			setTurnGunRight(360);
			
		}
	}

	/**
	 * onScannedRobot: What to do when you see another robot
	 */
	public void onScannedRobot(ScannedRobotEvent e) {
		// Replace the next line with any behavior you would like
		
		fire(2);
		fireBullet(1);
		fireBullet(1);
	}

	/**
	 * onHitByBullet: What to do when you're hit by a bullet
	 */
	public void onHitByBullet(HitByBulletEvent e) {
		// Replace the next line with any behavior you would like
		setAhead(55);
		setTurnRight(55);
		setAhead(55);
		setTurnRight(55);
		setBack(55);
		setTurnRight(90);
	}
	
	/**
	 * onHitWall: What to do when you hit a wall
	 */
	public void onHitRobot(HitRobotEvent e) {
		// Replace the next line with any behavior you would like
		setBack(55);
		setTurnRight(90);
		setAhead(60);
		setTurnLeft(90);
	}
		public void onHitWall(HitWallEvent e) {
		// Replace the next line with any behavior you would like
		back(55);
		turnRight(90);
		ahead(60);
	}		
	public void onWin (WinEvent   e) {
		System.out.println("Seus Lixxxoooo");
	}
	public void onDeath(DeathEvent e) {
		System.out.println("Caraio,sou um merda meu irmão.....");
	}
	
}
